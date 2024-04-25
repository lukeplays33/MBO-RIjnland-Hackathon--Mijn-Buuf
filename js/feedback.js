import '../AI/Brain.js';

let i, j, a, d;

let output;

let feedbackText = document.getElementById('feedbackText');

let testScores = {
    "Gezondheid": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 4
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    },
    "Wonen": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "3": {
            "antwoord": "1",
            "zwaarte": 4
        },
        "4": {
            "antwoord": "5",
            "zwaarte": 20
        },
        "5": {
            "antwoord": "ja",
            "zwaarte": 20
        }
    },
    "Werken": {
        "1": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "2": {
            "antwoord": "nee",
            "zwaarte": 0
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "Taal": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "SocialeContacten": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }, "Veiligheid": {
        "1": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "2": {
            "antwoord": "ja",
            "zwaarte": 20
        },
        "3": {
            "antwoord": "2",
            "zwaarte": 8
        },
        "4": {
            "antwoord": "2",
            "zwaarte": 0
        },
        "5": {
            "antwoord": "2",
            "zwaarte": 12
        }
    }

}

// 0 = Gezondheid

let replies = {
    0: {
        1: "Lichaams beweging zorgt ervoor dat je je energiek en gezond voelt, probeer wat vaker te sporten of met vrienden te wandelen.",
        2: "",

        3: "een zorgverzering helpt je met het betalen van je nodige zorg, je kan een zorgverzekering halen bij b.v. vgz.nl",
        4: "",

        5: "Ga naar een dokter voor een mogelijk onderzoek, een dokter zal je altijd helpen met je gezondheid.",
        6: "Zoek hulp bij vrienden of zie een arts.",
        7: "Praat erover met iemand.",
        8: "", // empty
        9: "", // empty

        10: "Ga naar een dokter een dokter zal je altijd helpen met je gezondheid.",
        11: "Zoek hulp bij een dokter als je niet lekker bent of ziek voelt.",
        12: "Zoek hulp bij vrienden of familie.",
        13: "", // empty
        14: "", // empty

        15: "Lichaamelijke beweging zorgt voor een energiek gevoel, ga wat vaker bewegen.",
        16: "Ga een dag extera lichaamelijke beweging doen, als dat lukt natuurlijk.",
        17: "", // empty
        18: "", // empty
        19: "", // empty
    },
    1: {
        1: "Zoek iemand die je vertrouwd en met wie je kan praten, ga eventueel het huis uit.",
        2: "",

        3: "Zorg voor items die je meer privacy kunnen geven zoals b.v. een doek om je af te schermen tijdens het omkleeden of zet een wachtwoord op je telefoon.",
        4: "",
    },
    2:{},
    3:{},
    4:{},
    5:{}
}

// Sample dataset
let net = new brain.NeuralNetwork();

net.train([
    { input: [0, 10, 20], output: { 1: 1 } },
    { input: [0, 10, 0], output: { 2: 1 } },

    { input: [0, 20, 20], output: { 3: 1 } },
    { input: [0, 20, 0], output: { 4: 1 } },

    { input: [0, 30, 20], output: { 5: 1 } },
    { input: [0, 30, 16], output: { 6: 1 } },
    { input: [0, 30, 12], output: { 7: 1 } },
    { input: [0, 30, 8], output: { 8: 1 } },
    { input: [0, 30, 4], output: { 9: 1 } },

    { input: [0, 40, 4], output: { 10: 1 } },
    { input: [0, 40, 8], output: { 11: 1 } },
    { input: [0, 40, 12], output: { 12: 1 } },
    { input: [0, 40, 16], output: { 13: 1 } },
    { input: [0, 40, 20], output: { 14: 1 } },

    { input: [0, 50, 4], output: { 15: 1 } },
    { input: [0, 50, 8], output: { 16: 1 } },
    { input: [0, 50, 12], output: { 17: 1 } },
    { input: [0, 50, 16], output: { 18: 1 } },
    { input: [0, 50, 20], output: { 19: 1 } },

    { input: [1, 10, 20], output: { 1: 1 } },
    { input: [1, 10, 0], output: { 2: 1 } },

    { input: [1, 20, 20], output: { 3: 1 } },
    { input: [1, 20, 0], output: { 4: 1 } },
]);

for (i of Object.keys(testScores)) {
    console.log(feedbackText.innerHTML)
    feedbackText.innerHTML = feedbackText.innerHTML + `<br><br><i><b>${i}:</b></i>
    <br><br>`;

    for (j of Object.keys(testScores[i])) {
        for (a of Object.keys(testScores[i][j])) {

            if (a == 'zwaarte') {
                let predictValue = [Object.keys(testScores).indexOf(i), Number(j + '0'), testScores[i][j][a]]; //for some reason j is a string
                output = net.run(predictValue);

                for (d of Object.keys(output)) {
                    let text = feedbackText.innerHTML + j + ': ' + replies[Object.keys(testScores).indexOf(i)][d] + '<br>';

                    if (output[d] == Math.max(...Object.values(output))) {
                        if (replies[Object.keys(testScores).indexOf(i)][d] == '') {} else {
                            feedbackText.innerHTML = text;
                        }
                    }
                }
            }
        }
    }
}