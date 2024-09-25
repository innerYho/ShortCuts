CLI
## Configuración del router
enable
    configure terminal
        interface gigabit0/0/1 or interface fastEthernet 0/0
                # IP clase c
            ip address 192.168.1.__ 255.255.255.0
            no shutdown
        exit
    end
    #Guardar la config
copy running-config startup-config

# Config 2 router Serial DCE
Se debe configurar cada router con el serial con ip address diferente
interface serial 0/0/0
    ip address 192.168.1.__ 255.255.255.0
            no shutdown
        exit
    exit
interface serial 0/1/0
    ip address 192.168.1.2 255.255.255.0
            no shutdown
        exit
    exit
# Routeo
Hacer que el router1 reconozca una red que posee el router2 hacia el switch
enable
    configure terminal
    ip que desconoce + mask subred + la ip que si conoce la red
        ip route 200.168.1.0 255.255.255.0 192.168.1.2 (es la direccion que posee las lineas que conectan el router2 con su swtich y la conoce por la conección del serial DCE que posee el router2)
https://www.youtube.com/watch?v=IMwxIyqpbMU&list=PLJW1HCvKZoXZrNl8Pyhtbg0bp8-eaieeI

# Config pc
ipv4 Address 192.168.1.2
subnet Mask 255.255.255.0
gateway (interface del router): 192.168.1.1

# Config laptop
ipv4 Address 192.168.1.3
subnet Mask 255.255.255.0
gateway (interface del router): 192.168.1.1


# Conexión 2 router
apagar el router e itegrar el modulo WIC-1T
El cable a utilizar el el serial DCE