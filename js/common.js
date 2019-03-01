// Date Attribute for Background Images
var list = document.getElementsByClassName('bg-images');
for (var i = 0; i < list.length; i++) {
	var src = list[i].getAttribute('data-background');
	list[i].style.backgroundImage="url('" + src + "')";
};