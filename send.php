{\rtf1\ansi\ansicpg1252\cocoartf2821
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
if ($_SERVER["REQUEST_METHOD"] == "POST") \{\
    $to = "tobias.m@mail.de";\
    $subject = "Neue Buchungsanfrage";\
    $message = "Name: " . $_POST["name"] . "\\n" .\
               "E-Mail: " . $_POST["email"] . "\\n" .\
               "Abholdatum: " . $_POST["abholdatum"] . "\\n" .\
               "Abholzeit: " . $_POST["abholzeit"] . "\\n" .\
               "R\'fcckgabedatum: " . $_POST["rueckgabedatum"] . "\\n" .\
               "R\'fcckgabezeit: " . $_POST["rueckgabezeit"] . "\\n" .\
               "Nachricht: " . $_POST["nachricht"];\
\
    mail($to, $subject, $message);\
    header("Location: danke.html");\
\}\
?>}