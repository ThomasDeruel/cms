</div>
</body>
<script>
var parent = document.querySelector('.header_nav_container');
  var lols =document.querySelectorAll('.lol');
  var lineRed=document.querySelector('.header_lineLink_active');
  for (let i = 0; i < lols.length; i++) {
    var lol = lols[i];


    lol.addEventListener('mouseenter',function(){
    var  size = (lols[i].offsetLeft-lols[i].clientLeft);
     lineRed.style.marginLeft=size+"px";
     lineRed.style.opacity="1";
    })

    parent.addEventListener('mouseleave',function(){
     lineRed.style.opacity="0";
     lineRed.style.marginLeft=0+"px";
    })


  }
</script>
</html>
