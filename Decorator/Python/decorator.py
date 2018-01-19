def printf(func):
    def decorator():
        print "test"
        func()
    return decorator

@printf
def test1():
    print "\n test1 \n"

test1()