<form name="myform" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="V5BWJXEALG63W">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Available Upgrades">Available Upgrades</td></tr>
                    <tr>
                        <td>
                            <select name="os0" onchange="setOptions(document.myform.os0.options[document.myform.os0.selectIndex].value);">
                            <option value="No upgrades">No upgrades $1549.00 USD</option>
                            <option value="Tier 1">Tier 1 $1,629.00 USD</option>
                            <option value="Tier 2">Tier 2 $1,699.00 USD</option>
                    </select> 
                        </td>
                    </tr>
                    <tr><td><input type="hidden" name="on1" value="Colors">Colors</td></tr>
                    <tr>
                        <td>
                            <select name="os1">
                            <option value="White">White </option>
                            <option value="Option 2">Option 2 </option>
                            <option value="Option 3">Option 3 </option>
                            <option value="Option 4">Option 4 </option>
                            <option value="Option 5">Option 5 </option>
                            <option value="Option 6">Option 6 </option>
                            <option value="Option 7">Option 7 </option>
                            <option value="Option 8">Option 8 </option>
                            <option value="Option 9">Option 9 </option>
                            <option value="Option 10">Option 10 </option>
                    </select> </td></tr>
                    <tr><td><input type="hidden" name="on2" value="Finishes (no charge)">Finishes (no charge)</td></tr><tr><td><select name="os2">
                            <option value="Brushed Nickel">Brushed Nickel </option>
                            <option value="Chrome">Chrome </option>
                            <option value="Oil Rubbed Bronze">Oil Rubbed Bronze </option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
<script type="text/javascript">
    function setOptions(chosen){
        var selbox = document.myform.os1;
        
        selbox.options.length = 0;
        if(chosen ==""){
            selbox.options[selbox.options.length] = new Option('Please select on of the options above first','');
        }
        if(chosen == "Tier 1")
    }
</script>