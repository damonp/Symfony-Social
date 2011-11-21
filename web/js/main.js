
var newwindow;
var intId;
function loginWindow(loginURL)  {
  var screenX   = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft,
    screenY   = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop,
    outerWidth  = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth,
    outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22),
    width   = 500,
    height    = 450,
    left    = parseInt(screenX + ((outerWidth - width) / 2), 10),
    top     = parseInt(screenY + ((outerHeight - height) / 2.5), 10),
    features = (
          'width=' + width +
          ',height=' + height +
          ',left=' + left +
          ',top=' + top +
          ',status=1,scrollbars=1'
          );

  newwindow=window.open(loginURL, 'Login', features);

   if(window.focus) { newwindow.focus(); }
  return false;
}
