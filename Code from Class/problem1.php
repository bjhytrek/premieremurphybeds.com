Arrays, Loops and Control Structures

In the view:

    Build a web page (HTML5), that includes a form.
    In the form, use the array below and use a loop to create a radio button group.

    array(
       array('East', 'ET'),
       array('Central', 'CT'),
       array('South', 'ST'),
       array('West', 'WT'),
       array('Pacific', 'PC')
       );

    Have PHP insert the appropriate data to the markup in the radio buttons.
    Add an input and label (correctly tied together) asking for the user first and last name within the form.
    The form should submit the data to a controller in the same folder.

In the controller:
    Collect and store all the data sent from the form
    Determine what value was sent from the radio button
    Create an html message and send it back to the same view to be displayed.
    The message should thank the person by first name, and tell them something related to the value chosen by the radio button.

