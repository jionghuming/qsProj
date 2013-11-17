# Create your views here.

from django.http import HttpResponse
from qs.functions import store
from qs.models import Person, Answer

def index(request):
    return HttpResponse("Hello,World!")

def sendqs(request):
    if(request.POST['dic']):
        dicts = request.POST.get('dic')
        store(eval(dicts))

    return HttpResponse("hehe")

def showall(request):
    for e in Answer.objects.all():
        print(e)

    for p in Person.objects.all():
        print(p)

    return HttpResponse("hehe")
