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
    },
    ar: {
        interval: {
            lower: 240.346784,
            upper: 381.586549
        },
        latency: {
            lower: 486.655847,
            upper: 675.61082
        },
        flight: {
            lower: 361.87248,
            upper: 518.32752
        },
        uptoup: {
            lower: 375.596353,
            upper: 528.403647
        }
    },
    tt: {
        interval: {
            lower: 112.231358,
            upper: 207.968642
        },
        latency: {
            lower: 286.958721,
            upper: 403.174612
        },
        flight: {
            lower: 219.80847,
            upper: 297.19153
        },
        uptoup: {
            lower: 204.713217,
            upper: 288.620117
        }
    }
};

const mapDwelTime = (touch) => ({
    character: touch.value,
    dwellTime: touch.keyUp - touch.keyDown,
    P: touch.keyDown,
    R: touch.keyUp
});

const getIlfu = (a, r) => ({
    interval: r.P - a.R,
    latency: r.R - a.P,
    flight: r.P - a.P,
    uptoup: r.R - a.R,
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

    const matcher = 'saraoett'.split('');
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

        if (dwelTimeResult.character === 'a' && index + 1 < dwelTimeResults.length && dwelTimeResults[index + 1].character === 'r') {
            const arIlfu = getIlfu(dwelTimeResults[index], dwelTimeResults[index + 1]);
            const arIntervalValidateResult = arIlfu.interval >= matcherDwellTime.ar.interval.lower && arIlfu.interval <= matcherDwellTime.ar.interval.upper;
            const arLatencyValidateResult = arIlfu.latency >= matcherDwellTime.ar.latency.lower && arIlfu.latency <= matcherDwellTime.ar.latency.upper;
            const arFlightValidateResult = arIlfu.flight >= matcherDwellTime.ar.flight.lower && arIlfu.flight <= matcherDwellTime.ar.flight.upper;
            const arUptoupValidateResult = arIlfu.uptoup >= matcherDwellTime.ar.uptoup.lower && arIlfu.uptoup <= matcherDwellTime.ar.uptoup.upper;
            results = [
                ...results,
                {
                    character: 'ar',
                    validateResult: arIntervalValidateResult && arLatencyValidateResult && arFlightValidateResult && arUptoupValidateResult,
                    ...arIlfu,
                    // intervalValidateResult: arIlfu.interval >= matcherDwellTime.ar.interval.lower && arIlfu.interval <= matcherDwellTime.ar.interval.upper,
                    // latencyValidateResult: arIlfu.latency >= matcherDwellTime.ar.latency.lower && arIlfu.latency <= matcherDwellTime.ar.latency.upper,
                    // flightValidateResult: arIlfu.flight >= matcherDwellTime.ar.flight.lower && arIlfu.flight <= matcherDwellTime.ar.flight.upper,
                    // uptoupValidateResult: arIlfu.uptoup >= matcherDwellTime.ar.uptoup.lower && arIlfu.uptoup <= matcherDwellTime.ar.uptoup.upper,
                }
            ]
        }

        if (dwelTimeResult.character === 't' && index + 1 < dwelTimeResults.length && dwelTimeResults[index + 1].character === 't') {
            const ttIlfu = getIlfu(dwelTimeResults[index], dwelTimeResults[index + 1]);
            const ttIntervalValidateResult = ttIlfu.interval >= matcherDwellTime.tt.interval.lower && ttIlfu.interval <= matcherDwellTime.tt.interval.upper;
            const ttLatencyValidateResult = ttIlfu.latency >= matcherDwellTime.tt.latency.lower && ttIlfu.latency <= matcherDwellTime.tt.latency.upper;
            const ttFlightValidateResult = ttIlfu.flight >= matcherDwellTime.tt.flight.lower && ttIlfu.flight <= matcherDwellTime.tt.flight.upper;
            const ttUptoupValidateResult = ttIlfu.uptoup >= matcherDwellTime.tt.uptoup.lower && ttIlfu.uptoup <= matcherDwellTime.tt.uptoup.upper;
            results = [
                ...results,
                {
                    character: 'tt',
                    validateResult: ttIntervalValidateResult && ttLatencyValidateResult && ttFlightValidateResult && ttUptoupValidateResult,
                    ...ttIlfu,
                    // intervalValidateResult: ttIlfu.interval >= matcherDwellTime.tt.interval.lower && ttIlfu.interval <= matcherDwellTime.tt.interval.upper,
                    // latencyValidateResult: ttIlfu.latency >= matcherDwellTime.tt.latency.lower && ttIlfu.latency <= matcherDwellTime.tt.latency.upper,
                    // flightValidateResult: ttIlfu.flight >= matcherDwellTime.tt.flight.lower && ttIlfu.flight <= matcherDwellTime.tt.flight.upper,
                    // uptoupValidateResult: ttIlfu.uptoup >= matcherDwellTime.tt.uptoup.lower && ttIlfu.uptoup <= matcherDwellTime.tt.uptoup.upper,
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