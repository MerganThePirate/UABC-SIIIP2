from urllib.parse import urljoin

from data.config import settings
from selenium import webdriver
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities


class WebApp:
    instance = None

    @classmethod
    def get_instance(cls):
        if cls.instance is None:
            cls.instance = WebApp()
        return cls.instance

    def __init__(self):
        chrome_options = webdriver.ChromeOptions()
        chrome_options.add_argument('--no-sandbox')
        chrome_options.add_argument('--headless')
        chrome_options.add_argument('--disable-gpu')
        self.driver = webdriver.Chrome(chrome_options=chrome_options)

    def get_driver(self):
        return self.driver

    def load_website(self):
        self.driver.get(settings['url'])

    def goto_page(self, page):
        url = urljoin(settings['url'], page.lower())
        self.driver.get(url)

    def verify_component_exists(self, component):
        self.driver.find_element_by_id(component)


webapp = WebApp.get_instance()
