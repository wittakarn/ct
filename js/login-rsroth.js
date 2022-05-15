const matcherDwellTime = {
    r: {
        lower: 97.2491905,
        upper: 184.75081
    },
    s: {
        lower: 74.9559307,
        upper: 180.444069
    },
    o: {
        lower: 73.7626938,
        upper: 182.477306
    },
    t: {

        lower: 46.9127635,
        upper: 138.053903
    },
    h: {

        lower: 94.0367696,
        upper: 184.16323
    },
    a: {

        lower: 79.0281452,
        upper: 187.911855
    },
    e: {

        lower: 70.2486743,
        upper: 150.051326
    },
    p: {

        lower: 129.186688,
        upper: 217.013312
    },
    b: {

        lower: 98.1976819,
        upper: 206.102318
    }
};

const mapDwelTime = (touch) => ({
    character: touch.value,
    dwellTime: touch.keyUp - touch.keyDown
});

const getFinalResult = (results) => {
    for (let result of results) {
        if (!result.validateResult) {
            return false;
        }
    }
    return true;
}

const getValidateResult = () => {
    let results = [];

    const matcher = 'rsroth'.split('');
    const dwelTimeResults = touchs.map(mapDwelTime);

    let position = 0;
    for (let index = 0; index < dwelTimeResults.length; index++) {
        const dwelTimeResult = dwelTimeResults[index];

        if (dwelTimeResult.character === matcher[position]) {
            results = [
                ...results,
                {
                    character: matcher[position],
                    validateResult: dwelTimeResult.dwellTime >= matcherDwellTime[matcher[position]].lower && dwelTimeResult.dwellTime <= matcherDwellTime[matcher[position]].upper,
                    dwellTime: dwelTimeResult.dwellTime
                }
            ]
            position = position + 1;
        } else {
            results = [
                ...results,
                {
                    character: dwelTimeResult.character,
                    validateResult: false,
                    dwellTime: dwelTimeResult.dwellTime
                }
            ]
        }
    }

    return results;
}

$('#validateButton').click(function () {
    const results = getValidateResult();
    const finalResult = getFinalResult(results);
    $('#eventInput').html(JSON.stringify(results));
    $("#result-template").html("<h2>" + finalResult + "</h2>");
});