

(function() {
    const menuToogle = document.querySelector('.menu-toggle')
    menuToogle.onclick = function (e) {
        const body = document.querySelector('body')
        body.classList.toggle('hide-sidebar')
    }
})()

function activateClock(){
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return

    function addOneSecond(hours, minutes, seconds) {

        const date = new Date()
        date.setHours(parseInt(hours))
        date.setMinutes(parseInt(minutes))
        date.setSeconds(parseInt(seconds) + 1)

        const h = `${date.getHours()}`.padStart(2, 0)
        const m = `${date.getMinutes()}`.padStart(2, 0)
        const s = `${date.getSeconds()}`.padStart(2, 0)

        return `${h}: ${m}: ${s}`
    }

    setInterval(function () {
        const parts = activeClock.innerHTML.split(':') // gera um array com cada elemento das horas
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock()

