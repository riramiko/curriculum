const img_src = ["images/main_01.jpg", "images/main_02.jpg", "images/main_03.jpg", "images/main_04.jpg", "images/main_05.jpg", "images/main_06.jpg"];
      let num = -1;
 
      function slide_time() {
        if (num === 5) {
          num = 0;
        } else {
          num++;
        }
        document.getElementById("slide_img").src = img_src[num];
      }
 
      setInterval(slide_time, 2700);

      