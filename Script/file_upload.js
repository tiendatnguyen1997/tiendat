$('#fileLoader').change(function() {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $('#filename').html(filename);
});
function resetForm(){
	$('#filename').html("Chọn hình ảnh");
}