from qs.models import Person, Answer

def storePerson(name="", mobile="", qq="", address="", imei=""):
    try:
        a = Answer.objects.get(imei=imei)
        p = Person(name=name,mobile=mobile,qq=qq,address=address)
        p.imei = a
        p.save()
    except Answer.DoesNotExist:
        newAnswer(imei=imei)
        p = Person(name=name,mobile=mobile,qq=qq,address=address)
        a = Answer.objects.get(imei=imei)
        p.imei = a
        p.save()

def newAnswer(imei="", sex="", age="", address="", edu="", position="",
              payment="",useMobileTime="",webTime="",webMoment="",webUsage=""):

    a = Answer(imei=imei,sex=sex,age=age,address=address,edu=edu,
                position=position,payment=payment)
    a.save()

def updateAnswer(dicts, answer):
    try:
        answer.useMobileTime = dicts.get("useMobileTime")
        answer.webTime = dicts.get("webTime")
        answer.webMoment = dicts.get("webMoment")
        answer.webUsage = dicts.get("webUsage")
        answer.save()
    except:
        print "update error"

def storeAnswer(dicts):
    try:
        imei = dicts['imei']
        try:
            a = Answer.objects.get(imei=imei)
            updateAnswer(dicts, a)
        except Answer.DoesNotExist:
            newAnswer(**dicts)
    except KeyError:
        print "This dict donot have a imei value."
        
# handle params by different method
def store(params):
    if(params.get('qq') != None):
        storePerson(**params)
    else:
        storeAnswer(params)
