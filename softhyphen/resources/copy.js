function copyToClipboard(text) {
  var ta = document.createElement('textarea');
  ta.value = text;
  ta.cols = 1;
  ta.rows = 1;
  ta.style.color = 'transparent';
  ta.style.border = 'none';
  document.body.appendChild(ta);
  ta.select();
  var success = false;
  try {
    success = document.execCommand('copy');
  } catch (err) {
    success = false;
  }
  document.body.removeChild(ta);
  return success;
}

document.querySelector('[href*=\"#softhyphen\"]').addEventListener('click', function(e) {
  e.preventDefault();
  copyToClipboard('­');
  setTimeout(function() {
    Craft.cp.displayNotice('Soft hyphen copied to clipboard');
  });
});
