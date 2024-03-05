
def calcular_area(base, altura):
    return base * altura

def calcular_perimetro(base, altura):
    return 2 * (base + altura)

base = float(input("Ingresa la base del rectángulo: "))
altura = float(input("Ingresa la altura del rectángulo: "))

area = calcular_area(base, altura)
perimetro = calcular_perimetro(base, altura)

print(f"El área del rectángulo es: {area}")
print(f"El perímetro del rectángulo es: {perimetro}")
