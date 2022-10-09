alert('Welcome to Maggie mane');
 $("ul").on("click", "li", function() {
	$(this).toggleClass("completed");
});