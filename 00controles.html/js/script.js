function atualizaOutIdade() {
    document.getElementById('outIdade').value = document.getElementById('txtIdade').value
}

function atualizaOutSatisfacao() {
    document.getElementById('outSatisfacao').value = document.getElementById('rngSatisfacao').value
}

function atualizaRngEq() {
    let rngEq = document.getElementById('rngGeral').value;
    switch(rngEq) {
        case '1':
            document.getElementById('rngAgudo').value       = 5
            document.getElementById('rngMedioAgudo').value  = 1
            document.getElementById('rngMedio').value       = 1
            document.getElementById('rngMedioGrave').value  = 1
            document.getElementById('rngGrave').value       = 1
            break
        case '2':
            document.getElementById('rngAgudo').value       = 1
            document.getElementById('rngMedioAgudo').value  = 5
            document.getElementById('rngMedio').value       = 1
            document.getElementById('rngMedioGrave').value  = 1
            document.getElementById('rngGrave').value       = 1
            break
        case '3':
            document.getElementById('rngAgudo').value       = 1
            document.getElementById('rngMedioAgudo').value  = 1
            document.getElementById('rngMedio').value       = 5
            document.getElementById('rngMedioGrave').value  = 1
            document.getElementById('rngGrave').value       = 1
            break
        case '4':
            document.getElementById('rngAgudo').value       = 1
            document.getElementById('rngMedioAgudo').value  = 1
            document.getElementById('rngMedio').value       = 1
            document.getElementById('rngMedioGrave').value  = 5
            document.getElementById('rngGrave').value       = 1
            break
        case '5':
            document.getElementById('rngAgudo').value       = 1
            document.getElementById('rngMedioAgudo').value  = 1
            document.getElementById('rngMedio').value       = 1
            document.getElementById('rngMedioGrave').value  = 1
            document.getElementById('rngGrave').value       = 5
            break
    }
}