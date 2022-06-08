$(".btnFooter").goBinary(
    {
        stepsUntilFixed: 5,
        mode: 'type',

        spsFormulaBasedOnTextLength: 'length/1' 
    }
);
$(".menu").goBinary(
    {
        stepsUntilFixed: 5,
        mode: 'type',

        spsFormulaBasedOnTextLength: 'length/1' 
    }
);
$(".soon").goBinary(
    {
        stepsUntilFixed: 5,
        mode: 'type',

        spsFormulaBasedOnTextLength: 'length/1' 
    }
);

$(".go-binary").goBinary(
    {
        stepsUntilFixed: 5,
        mode: 'type',

        spsFormulaBasedOnTextLength: 'length/1' 
    }
);


$.fn.goBinary.defaults = {
    text: '', // text to be binaryzed instead nodes text
    stepsUntilFixed: 2, // how many steps are needed to fix a character
    sps: 25, // steps per second
    matchRE: /[^\s]/, // Wich characters are going to be binary
    mode: 'shuffle', // How write the text with 3 possible values ['shuffle','type','endless']
    callback: function(){}, // A callback function to be called when method finished executing
    spsFormulaBasedOnTextLength: '0' // A formula to add sps base on length of text. The word 'length' gets replaced with the text length, for example: 'length/2' it's a valid formula and adds half of the text length as sps, so with a base sps of 50 and a text length of 100, it would add another 50 sps, being 100 sps the final speed.
};