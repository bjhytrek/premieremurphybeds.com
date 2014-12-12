<script type="text/javascript">
    function setOptions(chosen) {
        var teirs = document.myform.os1;

        switch(chosen)
        case "Standard Colors": 
             tiers.options[tiers.options.length] = new
                    Option('White', 'White');
            break;
        case "Tier 1 Colors":
           
            tiers.options[tiers.options.length] = new
                    Option('', 'Black');
            tiers.options[tiers.options.length] = new
                    Option('', 'Maple');
            break;
        }
        case "Tier 2 Colors":
            tiers.options[tiers.options.length] = new
                    Option('Chololate', 'Chololate');
            tiers.options[tiers.options.length] = new
                    Option('Mahogany', 'Mahogany');
            tiers.options[tiers.options.length] = new
                    Option('Medium Sycamore', 'Medium Sycamore');
            break;
        
    }