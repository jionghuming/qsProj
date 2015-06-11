# Create your views here.

from django.http import HttpResponse
from qs.functions import store, getObject
from qs.models import Person, Answer

from django.template import loader,Context

def index(request):
    return HttpResponse("Hello,World!")

def sendqs(request):
    if(request.POST['dic']):
        dicts = request.POST.get('dic')
        store(eval(dicts))

    return HttpResponse("hehe")

def showall(request):
    t = loader.get_template('show.html')
    c = Context(getObject())

    return HttpResponse(t.render(c))
