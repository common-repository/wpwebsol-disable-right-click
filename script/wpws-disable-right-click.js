document.addEventListener("contextmenu", function(e) {
  e.preventDefault();
});

document.addEventListener("keydown", function(e) {
  if ((e.ctrlKey && e.keyCode === 67) ||  // Ctrl + C
  (e.ctrlKey && e.keyCode === 88) ||  // Ctrl + X
  (e.keyCode === 123) ||             // F12
  (e.ctrlKey && e.shiftKey && e.keyCode === 73) ||  // Ctrl + Shift + I
  (e.ctrlKey && e.shiftKey && e.keyCode === 74)     // Ctrl + Shift + J
 ) {
e.preventDefault();
  }
});
