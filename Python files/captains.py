import csv
import lxml.html

url1='http://stats.espncricinfo.com/ci/content/records/283746.html'
#url2 ='283705'
#url3 ='type=year'
#url5 = ['http://stats.espncricinfo.com/ci/engine/records/team/match_results.html?class=1;id=1990;type=year']

out = csv.writer(open('testmatch_captains.csv','wb',))
out.writerow(('Player','Country','Span','Matches','Won','Lost','Tied','Draw','W/L','%W','%L'))

Player = []
Country = []
Span = []
Matches = []
Wins = []
Losses = []
Ties = []
Draws = []
Win_Loss = []
percent_win = []
percent_loss = []	
	
content = lxml.html.parse(url1)
	
player = content.xpath('//tr[@class="data1"]/td[1]/a')
country = content.xpath('//tr[@class="data1"]/td[1]/*')
span = content.xpath('//tr[@class="data1"]/td[2]')
matches = content.xpath('//tr[@class="data1"]/td[3]')
mtwon = content.xpath('//tr[@class="data1"]/td[4]')
mtloss = content.xpath('//tr[@class="data1"]/td[5]')
mttied = content.xpath('//tr[@class="data1"]/td[6]')
mtdrawn = content.xpath('//tr[@class="data1"]/td[7]')
wlratio = content.xpath('//tr[@class="data1"]/td[8]')
winpcnt = content.xpath('//tr[@class="data1"]/td[9]')
losspcnt = content.xpath('//tr[@class="data1"]/td[10]')

playr = [t1.text for t1 in player]
ct = [t2.tail for t2 in country]
tmf = [wt.text for wt in span]
mat = [wm.text for wm in matches]
mwon = [vn.text for vn in mtwon]
mloss = [ml.text for ml in mtloss]
mtied = [mt.text for mt in mttied]
mdrawn = [md.text for md in mtdrawn]
wlrat = [wlr.text for wlr in wlratio]
winpt = [wpt.text for wpt in winpcnt]
losspt = [lpt.text for lpt in losspcnt]
	
Player.extend(playr)
Country.extend(ct)
Span.extend(tmf)
Matches.extend(mat)
Wins.extend(mwon)
Losses.extend(mloss)
Ties.extend(mtied)
Draws.extend(mdrawn)
Win_Loss.extend(wlrat)
percent_win.extend(winpt)
percent_loss.extend(losspt)
    
zipped = zip(Player,Country,Span,Matches,Wins,Losses,Ties,Draws,Win_Loss,percent_win,percent_loss)
for row in zipped:
    out.writerow(row)
    zipped = None