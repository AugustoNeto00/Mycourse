stack = []
while True:
    print("Welcome to your online dishwasher!")
    wash = int(input(f"What do you want to do? \n 1 - Insert plate; 2 - Wash Plates \n Your choice:"))
    if wash == 1:
        stack.append("")
        print("Plate added")
        len(stack)
        print(f"Amount of plates: {len(stack)}")
    elif wash == 2:
        if len(stack) > 0:
            stack.pop()
            print("Plate washed")
        else:
            print("Don't have plates to wash.")
        break
    else:
        print("Error, only 1 or 2 are valid")