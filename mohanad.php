<?php
// احفظ محتوى الملف الذي تريد حفظه في متغير
$content = "محتوى الملف";

// قم بتعيين اسم الملف الذي ترغب في حفظه
$fileName = "example.txt";

// افتح الملف في وضع الكتابة
$file = fopen($fileName, "w");

// تأكد من أنه تم فتح الملف بنجاح قبل الكتابة فيه
if ($file) {
    // اكتب المحتوى في الملف
    fwrite($file, $content);
    echo "تم حفظ الملف بنجاح.";
} else {
    echo "فشل في فتح الملف.";
}

// اغلق الملف بعد الانتهاء من الكتابة فيه
fclose($file);
"workbench.colorTheme": "Default Dark Modern",
    "workbench.editorAssociations": {
        "*.exe": "default"
    },
    "liveServer.settings.donotShowInfoMsg": true,
    "liveServer.settings.donotVerifyTags": true,
    "php.validate.executablePath": ""
?>