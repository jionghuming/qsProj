from qs.models import Person, Answer
from django.forms.models import model_to_dict

def newPerson(dicts):

    default = ''
    imei = dicts.get('imei',default)
    name = dicts.get('name', default)
    mobile = dicts.get('mobile', default)
    qq = dicts.get('qq', default)
    email  = dicts.get('email', default)

    try:
        a = Answer.objects.get(imei=imei)
        p = Person(name=name,mobile=mobile,qq=qq,email=email)
        p.imei = a
        p.save()
    except Answer.DoesNotExist:
        newAnswer(imei=imei)
        p = Person(name=name,mobile=mobile,qq=qq,email=email)
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

def update(imei, dicts):
    try:
        a = Answer.objects.get(imei=imei)
        updateAnswer(dicts,a)
        newPerson(dicts)
    except Answer.DoesNotExist:
        newAnswer(**dicts)

def store(dicts):

    try:
        imei = dicts['imei']
        flag = isAnswered(imei)
        if flag == 2:
            print "you have answered this questionnaire."
        elif flag == 1:
            update(imei, dicts)
        else:
            newAnswer(**dicts)
    except KeyError:
        print "This dict donot have a imei value."

# check which form is posted
# 1 => form1
# 2 => form2
def checkForm(dicts):
    if dicts.get('sex') != None:
        return 1
    return 2
        
# check if the user have answered this questionnaire
# 0 => donot answered
# 1 => have answered q1
# 2 => have answered all
def isAnswered(imei):
    try:
        a = Answer.objects.get(imei=imei)
        if a.webTime != '' and a.sex != '':
            return 2
        return 1
    except Answer.DoesNotExist:
        return 0

def getObject():
    answers = {}
    persons = {}

    for e in Answer.objects.all():
        answers[e.imei] = model_to_dict(e)
        persons[e.imei] = getPerson(e.imei)

    result = {"answers":answers,"persons":persons}
    return result

def getPerson(imei):
    try:
        p = Person.objects.get(imei_id=imei)
        return p.getDic()
    except Person.DoesNotExist:
        return {}
