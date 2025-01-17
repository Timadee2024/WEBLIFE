<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script>
                    function bubbleSort(n1)

                    {

                         //alert (n1.length);

                            var msg="";
                             for(i=0; i<(n1.length-1);i++) //passes

                             {
                               // msg+=n1[i].value+" ";
                                for(j=0;j<(n1.length-1);j++)
                            {
                                x=Number (n1[j].value);

                                y=Number (n1[j+1].value);

                                if(x>y)

                                {
                                     temp=n1[j].value;

                                     n1[j].value=n1[j+1].value;

                                     n1[j+1].value=temp  

                                }
                            
                            
                            }
                                
                             }


                                //alert (msg);

                        }

                            function bubbleSortDesc (n1)
                            {
                                var msg="";
                                for (i=0;i<(n1.length-1);i++)
                            {

                                msg+=n1[i].value+" ";
                                for(j=0;j<(n1.length-1); j++)

                                {

                                    x=Number (n1[j].value);
                                    y=Number(n1[j+1].value);

                                                        if (x<y)

                                   {
                                    temp=n1[j].value;

                                    n1[j].value=n1[j+1].value;

                                    n1[j+1].value=temp  



                                   } 
                                }
                            }
                            }


                            function callSort(n1, pref)

                            {

                                if (pref[0].checked)
                            {
                                    bubbleSort(n1);
                                    
                            }
                            else if (pref[1].checked)
                            {
                                bubbleSortDesc(n1);
                            }
                            else
                            {
                                alert("Please select sorting preference!")
                            }
                            }


         </script>   







</head>
<body>
    <form name="frm1" method="post">

    No.1:<input type="text" name="ntxt"/><br/>
    No.2:<input type="text" name="ntxt"/><br/>
    No.3:<input type="text" name="ntxt"/><br/>
    No.4:<input type="text" name="ntxt"/><br/>
    No.5:<input type="text" name="ntxt"/><br/>
    No.6:<input type="text" name="ntxt"/><br/>
    No.7:<input type="text" name="ntxt"/><br/>
    No.8:<input type="text" name="ntxt"/><br/>
    No.9:<input type="text" name="ntxt"/><br/>
    No.10:<input type="text" name="ntxt"/><br/>
    <input type="radio" name="srt" value="asc"/> Ascending 
    <input type="radio" name="srt" value="dsc"/> Descending 
    <br/>

    <input type="button" name="sort" value="Sort" onclick="bubbleSort(ntxt)"/> 
</form>
</body>
</html>