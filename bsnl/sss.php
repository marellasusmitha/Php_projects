<html>
    <head>
        <h1>BSNL TELEPHONE BILL GENERATOR</h1>
        <script>
            function bill(){
                var a=parseInt(document.getElementById("FREECALLS").value);
                var b=document.getElementById("BILLAMOUNT").defaultvalue=150;
                var c=document.getElementById("Selectcategory").value;
                var t=document.getElementById("Units").value;
                var d;
                var f=document.getElementById("Finalamt").value;
                var g=document.getElementById("Finalamt").value;
                var e;
                if(c=="Rural"){
                    if(a<=100){
                        e=t*1;
                        document.getElementById("Finalamt").value=e;
                    }
                    else if(a<=200){
                        d=a-100;
                        e=t*2;
                        document.getElementById("Finalamt").value=e;
                    }
                    else{
                        d=a-100;
                        e=t*3;
                        document.getElementById("Finalamt").value=e;
                    }
                }
                if(c=="Urban"){
                    if(a<=100){
                        e=t*1;
                        document.getElementById("Finalamt").value=e;
                    }
                    else if(a<=200){
                        d=a-100;
                        e=t*2;
                        document.getElementById("Finalamt").value=e;
                    }
                    else{
                        d=a-100;
                        e=t*3;
                        document.getElementById("Finalamt").value=e;
                    }
                }
                f=e*d;
                document.getElementById("Finalamt").value=f;
                g=f+b;
                document.getElementById("Finalamt").value=g;

            }
            </script>

        <body>
            <form action="ttt.php"method="POST">
            <label>Consumerno:</label>
            <input type="number"id="Consumerno"name="Consumerno"required>&nbsp&nbsp
            <label>Units:</label>
            <input type="number"id="Units"name="Units"required>&nbsp&nbsp&nbsp
            <label>Selectcategory:</label>
            <select id="Selectcategory"name="Selectcategory">
            <option value="Select">Select</option>
            <option value="Rural">Rural</option>
            <option value="Urban">Urban</option></select><br><br>
            <label>FREECALLS:</label>
            <input type="number"id="FREECALLS"name="FREECALLS"required>&nbsp&nbsp&nbsp
            <label>BILLAMOUNT:</label>
            <input type="number"id="BILLAMOUNT"name="BILLAMOUNT" value=150 required>&nbsp&nbsp&nbsp
            <button onclick="bill()">calculate</button><br><br>
            <label>Finalamt:</label>
            <input type="number"id="Finalamt"name="Finalamt"required>&nbsp&nbsp&nbsp
            <input type="submit"value="Submit"name="submit"> 
        </form>            
</body>
</head>
</html>
