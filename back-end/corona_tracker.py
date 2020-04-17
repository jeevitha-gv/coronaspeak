'''
USAGE
C = corona_tracker()
C.reset() : resets the tracker head, used for next 100 news.
C.get_country_data()   : returns an array with details about number of infected
                         and dead etc for all countries with country code
C.get_top_n_news(n)    : returns the top n news from coronatracker
C.get_tot_number_news(): returns the total number of news in corona_tracker
C.get_next_100()       : returns next 100 news from when it was last called
                         it can be made to restart by using C.reset()
C.get_all_news()       : return all the news found in coronatracker
'''

class corona_tracker():
    '''
    uses API: api.coronatracker.com
    '''
    def __init__(self):
        self.curr = 0
    def get_country_data(self):     
        import requests,json     

        base = 'https://api.coronatracker.com/v2/analytics/country'     
        data = requests.get(base)     
        if data.status_code == 200:     
            content = json.loads(data.content)                                                     
               
            for i in range(len(content)):            
                try:                                 
                    content[i].pop('lng')     
                    content[i].pop('lat')     
                except:     
                    pass     
            return content     
        else:     
            return -1

    def get_top_n_news(self,num):
        import requests,json     
        base = 'https://api.coronatracker.com/news/trending?limit=' + str(int(num))
        base += '&offset=0&countryCode=&country=&language=en'
        data = requests.get(base)
        if data.status_code == 200:
            content = json.loads(data.content)    
            return content['items']
        else:     
            return -1

    def get_tot_number_news(self):
        import requests, json
        base = ('https://api.coronatracker.com/news/trending?limit=1' + 
                '&offset=0&countryCode=&country=&language=en')
        data = requests.get(base)
        if data.status_code == 200:
            content = json.loads(data.content)
            return int(content['total'])
        else: return -1

    def get_next_100(self):
        import requests, json
        head = 'https://api.coronatracker.com/news/trending?limit=100&offset='
        tail = '&countryCode=&country=&language=en'
        data = requests.get(head + str(self.curr) +tail)
        if data.status_code == 200:
            content = json.loads(data.content)
            self.curr += 100
            return content['items']
        else:
            return []

    def reset(self):
        self.curr = 0

    def get_all_news(self):
        self.reset()
        ret = []
        n = (self.get_tot_number_news()+99)//100
        for i in range(n):
            ret += self.get_next_100()
            print('progress {}/{}'.format(i+1,n))
        return ret
#C = corona_tracker()
#C.get_all_news()

