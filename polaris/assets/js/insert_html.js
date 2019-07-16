
//function gettexts() {
//document.getElementByid('article_texts').value = quill.root.innerHTML;
//}

//gettexts();
$(function(){
	$('form').submit(function(){
	var res = insert_html();
	return true;
	});

});

// ************** functions *****************
// エディターのテキストをinputのvalueに挿入する。からじゃなければpostされる
function insert_html(){
 var editor = $('#editor .ql-editor').html();
 var body = $('input[name = texts]');

 $(body).val(editor);

}