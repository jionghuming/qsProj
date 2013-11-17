from django.db import models

# Create your models here.

class Answer(models.Model):
    imei = models.CharField(max_length=200, primary_key=True)
    sex = models.CharField(max_length=20)
    age = models.CharField(max_length=20)
    address = models.CharField(max_length=20)
    edu = models.CharField(max_length=20)
    position = models.CharField(max_length=20)
    payment = models.CharField(max_length=20)
    useMobileTime = models.CharField(max_length=20)
    webTime = models.CharField(max_length=20)
    webMoment = models.CharField(max_length=20)
    webUsage = models.CharField(max_length=20)

    def __unicode__(self):
        return "answer: imei=>%s,sex=>%s,webusage=>%s" \
               % (self.imei,self.sex,self.webUsage)

class Person(models.Model):
    name = models.CharField(max_length=50)
    mobile = models.CharField(max_length=20)
    qq = models.CharField(max_length=50)
    address = models.CharField(max_length=200)
    imei = models.ForeignKey(Answer)

    def getDic(self):
        p = {}
        p['name'] = self.name
        p['mobile'] = self.mobile
        p['qq'] = self.qq
        p['address'] = self.address
        return p

    def __unicode__(self):
        return "person: imei=>[%s],name=>%s,mobile=>%s,qq=>%s,address=>%s" \
               % (self.imei,self.name,self.mobile,self.qq,self.address)
