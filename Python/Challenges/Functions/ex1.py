# example of a function that greets a user based on the time of day
def saudacao_personalizada(nome, horario):
    if 5 <= horario < 12:
        return f"Bom dia, {nome}!"
    elif 12 <= horario < 18:
        return f"Boa tarde, {nome}!"
    else:
        return f"Boa noite, {nome}!"
    print(saudacao_personalizada("Ana", 14))