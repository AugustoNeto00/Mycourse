page_stack = [1]
while True:
    page = int(input(f"You are at the page {len(page_stack)}\n click 1 - To pass the page forward; click 2 - for back to the past page \n Your choice: "))
    if page == 1:
        page_stack.append("")
        print("You passed one page")
        len(page_stack)
    elif page == 2:
        if len(page_stack) > 0:
            page_stack.pop()
            print(f"Back to page {len(page_stack)}")
        else:
            page_stack.append("")
    else:
        print("Error, only 1 or 2 are valid")