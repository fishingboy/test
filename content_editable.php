<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>富文字上傳圖片</title>
    <style>
        #editer{
            border: 1px solid #ccc;
            width: 800px;
            height: 400px;
            margin-bottom: 30px;
        }
        #editer img{
            /* 需要圖片換行的話，可以設定display:block; */
            display: block;
            max-width: 100px;
        }
    </style>
</head>
<body>
<div id="editer" contenteditable="true">
    123456123456
</div>
<button onclick="insertPic()">在遊標處插入圖片</button>
<div onclick="insertPic()">在遊標處插入圖片 - div</div>
<!--<input type="file" name="file" id="uploadFile" onchange="uploadFile(event)"/>-->
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript">
    var editer = document.getElementById('editer');
    var selRange;
    var sel;

    function saveSelection() {
        if(window.getSelection) {
            sel = window.getSelection();

            console.log("sel", sel);
            console.log("sel.focusNode", sel.focusNode);
            console.log("sel.focusNode.id", sel.focusNode.id);

            // if ()

            if(sel.getRangeAt && sel.rangeCount) {
                return sel.getRangeAt(0);
            }
        } else if(document.selection && document.selection.createRange) {
            return document.selection.createRange();
        }
        return null;
    }

    function saveCursor() {
        selRange = saveSelection();

        console.log("selRange => ", selRange);
    }

    function restoreSelection(range) {
        if(range) {
            if(window.getSelection) {
                sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
            } else if(document.selection && range.select) {
                range.select();
            }
        }
    }

    function insertPic() {
        saveCursor();

        let filePath = 'https://s3.hicloud.net.tw/forum.public/public/system/icon/M_E04A04.png';
        //filePath為後臺返回的圖片地址
        editer.focus();

        restoreSelection(selRange);
        document.execCommand('InsertImage', false, filePath);

    }
    function uploadFile(e){
        let file = e.target.files[0]; //需要上傳到後臺的圖片
        //上傳後臺，此處省略。。。。。。。。。。。
        let filePath = 'http://qiniu.jnwtv.com/LC20180417174434604455636.jpg';
        //filePath為後臺返回的圖片地址
        editer.focus();
        document.execCommand('InsertImage', false, filePath);
    }
</script>
</html>