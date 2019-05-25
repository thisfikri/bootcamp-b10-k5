$(document).ready(function () {

    function getRandNum(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function getRandStr() {
        var
            characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            charactersLenght = characters.length,
            randomString = '',
            i = 0;
        for (; i < 32; i++) {
            randomString += characters[getRandNum(0, charactersLenght - 1)];
        }
        return randomString;
    }

    function generateRandStr(count) {
        var i = 0, randStrings = [], currRandStr = '';
        for (; i < count; i++) {
            currRandStr = getRandStr();
            if (randStrings.length != 0 && randStrings.length > 1) {
                if (randStrings[i - 1] !== currRandStr) {
                    randStrings.push(currRandStr);
                } else {
                    i -= 1;
                }
            } else {
                randStrings.push(currRandStr);
            }
        }
        return randStrings;
    }

    $('#anpBtn').click(function () {
        $.ajax({
            type: "POST",
            url: "functions.php",
            data: {
                action: 'anp-btn',
                name: $('.anp-form input[name=add_new_programmer]').val(),
                id: generateRandStr(1)[0]
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
    });

    function addSkillBtn(index) {
        $('.addSkillBtn').eq(index).click(function () {
            var
                itemID = index + 1,
                names = '';
                names = $('.item'+ itemID +' input[name=add_skills]').val() + ','
                console.log(names, 'item'+ itemID);
            $.ajax({
                type: "POST",
                url: "functions.php",
                data: {
                    action: 'add_skill_btn',
                    username: $('.addSkillBtn').eq(index).data('username'),
                    name: names,
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                }
            });
        });
    }

    var i = 0, asbCount = $('.addSkillBtn').length;

    for (; i < asbCount; i++) {
        addSkillBtn(i);
    }
});