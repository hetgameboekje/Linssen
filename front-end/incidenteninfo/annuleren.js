function AnnulerenConfirm() {
    document.getElementById("AnnulerenBtn").textContent="Confirm binnen 3";
    setTimeout(function(){
        document.getElementById("AnnulerenBtn").textContent="Confirm binnen 2";
        setTimeout(function(){
            document.getElementById("AnnulerenBtn").textContent="Confirm binnen 1";
            setTimeout(function(){
                document.getElementById("AnnulerenBtn").textContent="ANNULEREN";
                }
                ,1000);
            }
            ,1000);
        }
        ,1000);
}