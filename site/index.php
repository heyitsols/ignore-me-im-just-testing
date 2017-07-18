<!DOCTYPE html>
<html>
<head>
<title>[oliver@leaversmith.com ~]</title>
<style type="text/css">
/*@-webkit-keyframes bg-pan-left{0%{background-position:100% 50%}100%{background-position:0 50%}}@keyframes bg-pan-left{0%{background-position:100% 50%}100%{background-position:0 50%}}*/
html,body{height:100%;margin:0;}
body{font-family:sans-serif;/*animation:bg-pan-left 8s linear infinite both;*/}
pre{color:#f0f0f0;padding:10px;white-space:pre-wrap;word-wrap:break-word;}
#terminal{width:80ch;background-color:#222;border-radius:10px;margin:0 auto;}
#floater{height:50%;margin-bottom:-210px;}
#footer{color:#777;font-weight:bold;font-size:10px;width:100%;text-align:center;position:absolute;bottom:0;padding-bottom:10px;}
a:link,a:visited,a:hover{color:#f0f0f0;}
.block{animation: blinker 1.5s steps(1) infinite;}
@keyframes blinker{50%{opacity:0;}}
</style>
</head>
<body>
<div id="floater"></div>
<div id="terminal">
<pre>
[oliver@leaversmith.com ~] cat bio.txt
Born, raised, and residing in Sheffield, I currently live in Stannington with my wife and our daughter.

[oliver@leaversmith.com ~] gpg -k <a href="mailto:oliver@leaversmith.com">oliver@leaversmith.com</a>
pub   4096R/<a href="/keys/ols_pgp.asc">16503BFB 2017-05-17</a>
uid                  Oliver Leaver-Smith &lt;<a href="mailto:oliver@leaversmith.com">oliver@leaversmith.com</a>&gt;
sub   4096R/598D671A 2017-05-17
sub   4096R/0A23808A 2017-05-17
sub   4096R/669887F7 2017-05-17

[oliver@leaversmith.com ~] cat <a href="/keys/ols_ssh.asc">.ssh/id_rsa.pub</a>
ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEA+VPXExTY/UcI8Iw6j6Hnb1kk8vQ60MRvc7RG4xMuvR4cOpArwWLClLuR5sl5VEzmaXp3CGKLL16zavHOa+zKOu6/liQyehKn6LQlq0GwCpSIs9uupe/56bwstO6uTQIZWchUyjkr7nuA9aWUqUyg+3IvAzIAQmT1cv6qmlWaqL6T8Fw2aORqUcPoud2GerBJiGs4tnnFFbmppnRaSY5rvOtvlD+fppqFNwQ342Ddots+PvhVNSqy2AFt+PZtMxPTW5cylIWuJF5FGlcp0nKWyL/OtjwFFbq6/A0VnCTYcPJLNLdPfcCOhI7oxmSwNcLzcLUPtz6amWX5WLl8zPZtkw==

[oliver@leaversmith.com ~] jobs
[1]-  Running          husband --wife=kayleigh &
[2]+  Running          father --gender=daughter --name=poppy &

[oliver@leaversmith.com ~] # watch this space, I'm thinking about doing a blog!

[oliver@leaversmith.com ~] <span class="block">&block;</span>
</pre>
</div>
<div id="footer">
Oliver Leaver-Smith
</div>
</body>
</html>
