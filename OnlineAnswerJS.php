<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网上答题</title>
<script>
 <!-- hide
 var ans = new Array;
 var done = new Array;
 var score = 0;
 // LOSER!  Don't read the answers!
 ans[1] = "a";
 ans[2] = "b";
 ans[3] = "c";
 ans[4] = "b";
 ans[5] = "b";
 ans[6] = "b";
 ans[7] = "c";
 ans[8] = "b";
 ans[9] = "b";
 ans[10] = "a";
 function Engine(question, answer) {
         if (answer != ans[question]) {
                 if (!done[question]) {
                         done[question] = -1;
                         //alert("你选错了，你答对了" + score + "个");
						 alert("选错了，正确答案是 " + ans[question]);
                         }
                 else {
                         alert("你已经选过这个了");
                         }
                 }
         else {
                 if (!done[question]) {
                         done[question] = -1;
                         score++;
                         //alert("恭喜你，你答对了" + score + "个");
                         }
                 else {          
                         alert("你已经回答过这个了!");
                         }
                 }
 }

 function NextLevel () {
 	alert("你的最终得分是  "+score);
 }
 </script>
</head>
<body>
  <form>
 <b>1.（ ）是社会发展的最终决定力量。</b><p>
 <input type=radio value="a" onClick="Engine(1, this.value)">生产力<br>
 <input type=radio value="b" onClick="Engine(1, this.value)">生产关系<br>
 <input type=radio value="c" onClick="Engine(1, this.value)">生产方式<br>

 <b>2. 十七大报告指出，（ ）对于全面建设小康社会，加快推进社会主义现代化具有决定性意义。</b><p>
 <input type=radio value="a" onClick="Engine(2, this.value)">改革<br>
 <input type=radio value="b" onClick="Engine(2, this.value)">发展<br>
 <input type=radio value="c" onClick="Engine(2, this.value)">稳定<br>

 <b>3. 1978年召开的党的（  ），是建国以来我党历史上具有深远意义 的伟大转折。</b><p>
 <input type=radio value="a" onClick="Engine(3, this.value)">中共中央工作会议<br>
 <input type=radio value="b" onClick="Engine(3, this.value)">十一届六中全会<br>
 <input type=radio value="c" onClick="Engine(3, this.value)">十一届三中全会<br>

 <b>4. 党章规定，发展党员，必须经过（ ），坚持个别吸收的原则。</b><p>
 <input type=radio value="a" onClick="Engine(4, this.value)">党委<br>
 <input type=radio value="b" onClick="Engine(4, this.value)">党的支部<br>
 <input type=radio value="c" onClick="Engine(4, this.value)">党小组<br>

 <b>5. 中国共产党的宗旨是（  ）。 </b><p>
 <input type=radio value="a" onClick="Engine(5, this.value)">实现社会主义现代化<br>
 <input type=radio value="b" onClick="Engine(5, this.value)">全心全意为人民服务<br>
 <input type=radio value="c" onClick="Engine(5, this.value)">坚持党的基本路线和基本纲领不动摇<br>

 <b>6. 2000年2月25日，江泽民同志在广州考察工作时提出（  ）重要思想。</b><p>
 <input type=radio value="a" onClick="Engine(6, this.value)">“三讲” <br>
 <input type=radio value="b" onClick="Engine(6, this.value)">“三个代表”<br>
 <input type=radio value="c" onClick="Engine(6, this.value)">“三大任务”<br>

 <b>7. 实施（ ）战略，关系全国发展的大局，关系民族团结和边疆稳定。 </b><p>
 <input type=radio value="a" onClick="Engine(7, this.value)">可持续发展<br>
 <input type=radio value="b" onClick="Engine(7, this.value)">科教兴国<br>
 <input type=radio value="c" onClick="Engine(7, this.value)">西部大开发<br>

 <b>8. 十七报告指出，事实雄辩地证明（ ）是决定当前中国革命的关键抉择，是发展中国特色社会主义，实现中华民族伟大复兴的必由之路。 </b><p>
 <input type=radio value="a" onClick="Engine(8, this.value)">依法治国<br>
 <input type=radio value="b" onClick="Engine(8, this.value)">改革开放<br>
 <input type=radio value="c" onClick="Engine(8, this.value)">科教兴国<br>

 <b>9. 党章规定，预备党员的预备期为（ ）。 </b><p>
 <input type=radio value="a" onClick="Engine(9, this.value)">半年<br>
 <input type=radio value="b" onClick="Engine(9, this.value)">一年<br>
 <input type=radio value="c" onClick="Engine(9, this.value)">两年<br>

 <b>10. 党领导人民在建设社会主义物质文明和（ ）的同时，努力建设社会主义精神文明。 </b><p>
 <input type=radio value="a" onClick="Engine(10, this.value)">政治文明<br>
 <input type=radio value="b" onClick="Engine(10, this.value)">法治文明<br>
 <input type=radio value="c" onClick="Engine(10, this.value)">现代文明<br>

 <center>

 <input type=button onClick="NextLevel()" value="提交">

 </center>
 </form>
</body>
</html>
