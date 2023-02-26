function getCheckboxValue()  {

    // 선택된 목록 가져오기

    const query = 'input[name="Interests"]:checked';

    const selectedEls = 

        document.querySelectorAll(query);

    

    // 선택된 목록에서 value 찾기

    let result = '';

    selectedEls.forEach((el) => {

      result += el.value + ' ';

    });

    

    // 출력

    document.getElementById('result').innerText

      = result + "/";

  }


  function myFunction() {
    var x = document.getElementById("inputWrap");
    if (x.style.display === "block") {
          x.style.display = "none";
          document.getElementById("down").style.rotate="180deg";
  } else {
          x.style.display = "block";
          document.getElementById("down").style.rotate="360deg";
    }

}