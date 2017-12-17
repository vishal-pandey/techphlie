    $(".link-form").submit(function(e) {
        var url = "./model/create.php"; 

        $.ajax({
               type: "POST",
               url: url,
               data: $(this).serialize(), 
               success: function(data)
               {
                   $.post("./model/link.php",
                    {
                       id: data
                    },
                    function(data, status){
                      $(".thelink").html(data);
                    });
               }
             });

        e.preventDefault(); 
    });