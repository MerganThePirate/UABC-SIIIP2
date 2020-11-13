from framework.webapp import webapp


class Dashboard():
    instance = None

    @classmethod
    def get_instance(cls):
        if cls.instance is None:
            cls.instance = Dashboard()
        return cls.instance

    def __init__(self):
        self.driver = webapp.get_driver()

    def verify_status(self, row):
        # Ex:
        # status = self.driver.find_element_by_id('dashboard-status-component').text
        # assert row in status, "{} not present in status component".format(row)
        print("A");

dashboard = Dashboard.get_instance()
