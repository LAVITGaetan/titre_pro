
    function changeImage() {
        if (document.getElementById("left_1").src == "image/Graphiste.png") 
        {
            document.getElementById("left_1").src == "image/none.png";
            document.getElementById("right_1").src == "image/Graphiste.png";
        }
        else 
        {
            alert('erreur');
        }
    }
