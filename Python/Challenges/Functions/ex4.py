# This function calculates the amount of fuel in liters based on the time of travel and speed.
def calcular_litros(tempo, velocidade):
    distancia = tempo * velocidade
    litros = distancia / 12
    return litros

# Example usage of the calcular_litros function
tempo = int(input())
velocidade = int(input())

resultado = calcular_litros(tempo, velocidade)

print(f"{resultado:.3f}")