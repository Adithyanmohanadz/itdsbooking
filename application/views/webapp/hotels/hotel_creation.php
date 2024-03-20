

 <script src="assets2/js/plugins/choices.min.js"></script>

 <script>
     if (document.getElementById('choices-country')) {
         var element = document.getElementById('choices-country');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     };
     if (document.getElementById('choices-state')) {
         var element = document.getElementById('choices-state');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     };
     if (document.getElementById('choices-city')) {
         var element = document.getElementById('choices-city');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     };
 </script>