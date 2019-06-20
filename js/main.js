const server_ip = "axelfiolle.be"
const server_port = "25565"

const getMcStatus = (ip) => {
    console.log('api',MinecraftAPI)
    MinecraftAPI.getServerStatus(ip, {port: 25565}, (err, status) => {
        if (err) {
            document.querySelector('.server-status').innerHTML = 'inconnu'
            document.querySelector('.server-status').classList.add('err')
        }
        else {
            document.querySelector('.server-status').innerHTML = status.online ? 'ouvert' : 'fermé'

            if (status.online) {
                document.querySelector('.server-status').classList.add('up')
                document.querySelector('.player-count').innerHTML = status.players.now
                document.querySelector('.player-max').innerHTML = status.players.max
                document.querySelector('.server-name').innerHTML = status.server.name
            }
            else document.querySelector('.server-status').classList.add('down')
        }
    });
}

const clipIp = () => {
    const field = document.createElement('textarea');
    field.value = server_ip+':'+server_port
    field.style.opacity = 0;
    document.body.appendChild(field)
    field.select()
    document.execCommand('copy')
    document.body.removeChild(field)
}

document.addEventListener('DOMContentLoaded', function() {
    $('.scrollspy').scrollSpy()
    $('.collapsible').collapsible()
    $('.modal').modal()
    $('.sidenav').sidenav()
    $('.tooltipped').tooltip()

    $('.carousel.carousel-slider').carousel({fullWidth: true,indicators: true})

    getMcStatus(server_ip)

    $('.server-ip').onclick = () => {
        clipIp();
        M.toast({html: 'IP copiée !'})
    }
  });



