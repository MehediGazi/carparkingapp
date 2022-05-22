from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/carparkingapp/index.html")
print(driver.title)


btn = driver.find_element_by_class_name('hero1-btn')
btn.click()

link= driver.find_element_by_xpath('/html/body/section[1]/div/div/div[1]/div[2]/div/button[1]')
print(link)
print(link.text)



while(True):
	continue
