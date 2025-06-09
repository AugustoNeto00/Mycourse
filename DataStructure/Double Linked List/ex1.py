class doubleNode:
    def __init__ (self, val):
        self.val = val
        self.next = None
        self.previus = None

class doubleLinkedList:
    def __init__(self):
        self.start = None
        self.end = None
    
    def insertatStart(self, val):
        new_node = doubleNode(val)
        if self.start is None:
            self.start = self.end = val
        else:
            #ainda fazendo

class Nodelist:


No1 = doubleNode("João")        
No2 = doubleNode("Marina")        
No3 = doubleNode("Pedro")        
