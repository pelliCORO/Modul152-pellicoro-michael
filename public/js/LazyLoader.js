function loadFullImage(event) {
 console.log("Blabla")
	var img = event.currentTarget;
	img.onload = null;
	img.src = img.src.replace("_(Thumbnail)", "");
}
