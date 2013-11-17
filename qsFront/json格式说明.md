所有的key值对应题目的题号，一次如下  
1-6   sex,age,address,edu,position,payment  
7-10  useMobileTime,webTime,webMoment,webUsage

提供选择的答案一次是1，2，3。。。

下面举个例子
第一题  
1. 您的性别？  
男  
女

如果选择男，则选中的答案是1  
则上传到json格式是{"sex":"1"]}

然后是多选的例子  
9. 您平时用手机上网的时段是？（可多选）
早晨
上午
中午
下午
晚上
深夜

如果选择早晨，上午，晚上，则选中的答案是1，2，5  
则上传的json格式是{"webMoment":"1,2,5"}  

懂了吗？
