var editor, mode, dir, doc, saved, selectedFile;
var keys = {};

function load() {
  editor = ace.edit("editor");
  openFolder("..");
  window.addEventListener("keydown", function(event) {
    keys[event.code] = true;
    if((event.ctrlKey || event.metaKey) && keys["KeyS"]) {
      event.preventDefault();
      save();
    }
  });
  window.addEventListener("keyup", function(event) {delete keys[event.code];});
  document.getElementById("editor").addEventListener("keyup", checkSave);
}
function post(url,data,callback) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this.responseText);
    }
  };
  xhr.open("POST", 'php/' + url, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  if(typeof data === "object") {
    var newObj = "";
    for(var i in data) {
      newObj += i + '=' + data[i];
      if(Object.keys(data).indexOf(i) !== Object.keys(data).length-1) {
        newObj += "&";
      }
    }
    data = newObj;
  }
  xhr.send(encodeURI(data));
}

function openFolder(folder) {
  post("dir.php", {folder:folder}, function(data) {
    dir = folder;
    document.getElementById('files').innerHTML = data;
  });
}
function openFile(file) {
  post("file.php", {file:file}, function(data) {
    doc = file;
    saved = data;demo=doc.split('/').pop();
    document.getElementById("file").textContent = doc.split('/').pop();
    document.getElementById("file1").innerHTML = "<a href="+doc.split('/').pop()+"  target='_blank'>run</a>";
    editor.setValue(data, -1);
    setMode();
  });
}
function save() {
  if(doc === undefined) {return false;}
  post("save.php", {file:doc,code: editor.getValue()}, function(data) {
    if(data === 'true') {
      saved = editor.getValue();
      checkSave();
    }
    else {
      console.log(data);
    }
  });
}
function setMode() {
  var modelist = ace.require("ace/ext/modelist");
  mode = modelist.getModeForPath(doc).mode;
  editor.session.setMode(mode);
}
function checkSave() {
  if(editor.getValue() !== saved && saved !== undefined) {
    document.getElementById("save").style.display = "block";
  }
  else {
    document.getElementById("save").style.display = "none";
  }
}


function newFile() {
  var filename = prompt("Enter the file/folder name");

  if(filename) {
    post("newFile.php", {filename, dir}, function(data) {
      if(data == true) {
        openFolder(dir);
      }
      else {
        console.log(data);
      }
      closeMenu();
    });
  }
}
function delFile() {
  if(selectedFile) {
    post("delFile.php", {path:selectedFile}, function(data) {
      if(data == true) {
        openFolder(dir);
      }
      else {
        console.log(data);
      }
      closeMenu();
    });
  }
}





function deselectAll() {
  document.querySelectorAll('.selected').forEach(function(e) {
    e.classList.remove('selected');
  });
}
function closeMenu() {
  document.getElementById('menu').className = '';
  deselectAll();
  selectedFile = null;
}

function fileMouseDown(event, file) {
  if(file && event.button === 2) {
    deselectAll();
    file.classList.add('selected');
    document.getElementById('menu').style.top = event.clientY + "px";
    document.getElementById('menu').style.left = event.clientX + "px";
    document.getElementById('menu').className = 'show';

    selectedFile = file.dataset.path;

    event.stopPropagation();
  }
}
