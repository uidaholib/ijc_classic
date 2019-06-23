
      function enterKey(evt) {
      var evt = (evt) ? evt : event
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode == 13) {
      searchPrimo()
      }
      }
      function searchPrimo() {
      document.getElementById("primoQuery").value = document.getElementById("primoFieldTemp").value + ",contains," +
      document.getElementById("primoQueryTemp").value;
      document.forms["searchForm"].submit();
      }
      function searchPrimoEvent(event) {
      if (event && event.which == 13) {
      document.getElementById("primoQuery").value = document.getElementById("primoFieldTemp").value + ",contains," +
      document.getElementById("primoQueryTemp").value;
      document.forms["searchForm"].submit();
      }
      else
      return true;
      }
    
      function enterKey(evt) {
      var evt = (evt) ? evt : event
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode == 13) {
      searchPrimoBooks()
      }
      }
      function searchPrimoBooks() {
      document.getElementById("primoQueryBooks").value = document.getElementById("primoFieldTempBooks").value + ",contains," +
      document.getElementById("primoQueryTempBooks").value;
      document.forms["searchForm"].submit();
      }
      function searchPrimoEvent(event) {
      if (event && event.which == 13) {
      document.getElementById("primoQueryBooks").value = document.getElementById("primoFieldTempBooks").value + ",contains," +
      document.getElementById("primoQueryTempBooks").value;
      document.forms["searchFormBooks"].submit();
      }
      else
      return true;
      }
  
      function enterKey(evt) {
      var evt = (evt) ? evt : event
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode == 13) {
      searchPrimoJournals()
      }
      }
      function searchPrimoJournals() {
      document.getElementById("primoQueryJournals").value = document.getElementById("primoFieldTempJournals").value + ",contains," +
      document.getElementById("primoQueryTempJournals").value;
      document.forms["searchFormJournals"].submit();
      }
      function searchPrimoEvent(event) {
      if (event && event.which == 13) {
      document.getElementById("primoQueryJournals").value = document.getElementById("primoFieldTempJournals").value + ",contains," +
      document.getElementById("primoQueryTempJournals").value;
      document.forms["searchFormJournals"].submit();
      }
      else
      return true;
      }
    